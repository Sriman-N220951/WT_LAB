# Git Industry Level Commands Practice

## 1. Git Configuration Commands

### git config --global user.name
**Syntax**
```
git config --global user.name "Your Name"
```
**Purpose**  
Sets the global username for Git commits.

**Example**
```
git config --global user.name "Sriman"
```
**Screenshot Proof**
![git-config-username](screenshots/git-config-username.png)

---

### git config --global user.email
**Syntax**
```
git config --global user.email "email@example.com"
```
**Purpose**  
Sets the global email for Git commits.

**Example**
```
git config --global user.email "sriman@gmail.com"
```
**Screenshot Proof**
![git-config-email](screenshots/git-config-email.png)

---

### git config --list
**Syntax**
```
git config --list
```
**Purpose**  
Displays all Git configuration settings.

**Example**
```
git config --list
```
**Screenshot Proof**
![git-config-list](screenshots/git-config-list.png)

---

### git config --unset
**Syntax**
```
git config --unset user.name
```
**Purpose**  
Removes a Git configuration value.

**Example**
```
git config --unset user.name
```
**Screenshot Proof**
![git-config-unset](screenshots/git-config-unset.png)

---

# 2. Repository Setup Commands

### git init
**Syntax**
```
git init
```
**Purpose**  
Initializes a new Git repository.

**Example**
```
git init
```
**Screenshot Proof**
![git-init](screenshots/git-init.png)

---

### git clone
**Syntax**
```
git clone <repository-url>
```
**Purpose**  
Copies a repository from GitHub to the local machine.

**Example**
```
git clone https://github.com/Sriman-N220951/WT_LAB.git
```
**Screenshot Proof**
![git-clone](screenshots/git-clone.png)

---

### git clone --branch
**Syntax**
```
git clone --branch <branch-name> <repo-url>
```
**Purpose**  
Clones a specific branch.

**Example**
```
git clone --branch main https://github.com/Sriman-N220951/WT_LAB.git
```
**Screenshot Proof**
![git-clone-branch](screenshots/git-clone-branch.png)

---

### git clone --depth
**Syntax**
```
git clone --depth 1 <repo-url>
```
**Purpose**  
Clones only the latest commit history.

**Example**
```
git clone --depth 1 https://github.com/Sriman-N220951/WT_LAB.git
```
**Screenshot Proof**
![git-clone-depth](screenshots/git-clone-depth.png)

---

# 3. Repository Status & Inspection

### git status
**Syntax**
```
git status
```
**Purpose**  
Displays the current state of the repository.

**Example**
```
git status
```
**Screenshot Proof**
![git-status](screenshots/git-status.png)

---

### git log
**Syntax**
```
git log
```
**Purpose**  
Shows commit history.

**Example**
```
git log
```
**Screenshot Proof**
![git-log](screenshots/git-log.png)

---

### git log --oneline
**Syntax**
```
git log --oneline
```
**Purpose**  
Displays commit history in a short format.

**Example**
```
git log --oneline
```
**Screenshot Proof**
![git-log-oneline](screenshots/git-log-oneline.png)

---

### git log --graph
**Syntax**
```
git log --graph
```
**Purpose**  
Displays commit history as a graph.

**Example**
```
git log --graph
```
**Screenshot Proof**
![git-log-graph](screenshots/git-log-graph.png)

---

### git show
**Syntax**
```
git show
```
**Purpose**  
Displays detailed information about a commit.

**Example**
```
git show
```
**Screenshot Proof**
![git-show](screenshots/git-show.png)

---

### git diff
**Syntax**
```
git diff
```
**Purpose**  
Shows changes between working directory and staging area.

**Example**
```
git diff
```
**Screenshot Proof**
![git-diff](screenshots/git-diff.png)

---

### git diff --staged
**Syntax**
```
git diff --staged
```
**Purpose**  
Shows staged changes.

**Example**
```
git diff --staged
```
**Screenshot Proof**
![git-diff-staged](screenshots/git-diff-staged.png)

---

### git blame
**Syntax**
```
git blame <file>
```
**Purpose**  
Shows who modified each line in a file.

**Example**
```
git blame index.html
```
**Screenshot Proof**
![git-blame](screenshots/git-blame.png)

---

### git reflog
**Syntax**
```
git reflog
```
**Purpose**  
Shows reference logs.

**Example**
```
git reflog
```
**Screenshot Proof**
![git-reflog](screenshots/git-reflog.png)

---

### git shortlog
**Syntax**
```
git shortlog
```
**Purpose**  
Summarizes commit history by author.

**Example**
```
git shortlog
```
**Screenshot Proof**
![git-shortlog](screenshots/git-shortlog.png)

---

# 4. File Tracking Commands

### git add
**Syntax**
```
git add <file>
```
**Purpose**  
Adds a specific file to the staging area.

**Example**
```
git add index.html
```

---

### git add .
**Syntax**
```
git add .
```
**Purpose**  
Adds all files to staging.

**Example**
```
git add .
```

---

### git add -p
**Syntax**
```
git add -p
```
**Purpose**  
Interactively stage parts of files.

---

### git restore
**Syntax**
```
git restore <file>
```
**Purpose**  
Restores file changes.

---

### git restore --staged
**Syntax**
```
git restore --staged <file>
```
**Purpose**  
Unstages a file.

---

### git rm
**Syntax**
```
git rm <file>
```
**Purpose**  
Removes a tracked file.

---

### git mv
**Syntax**
```
git mv <oldname> <newname>
```
**Purpose**  
Moves or renames a file.

---

# 5. Commit Commands

### git commit
```
git commit
```

### git commit -m
```
git commit -m "message"
```

### git commit --amend
```
git commit --amend
```

### git commit --no-edit
```
git commit --amend --no-edit
```

---

# 6. Branch Management Commands

### git branch
```
git branch
```

### git branch -a
```
git branch -a
```

### git branch -d
```
git branch -d branch-name
```

### git branch -D
```
git branch -D branch-name
```

### git checkout
```
git checkout branch-name
```

### git checkout -b
```
git checkout -b new-branch
```

### git switch
```
git switch branch-name
```

### git switch -c
```
git switch -c new-branch
```

---

# 7. Merge & Integration Commands

### git merge
```
git merge branch-name
```

### git merge --no-ff
```
git merge --no-ff branch-name
```

---

# 8. Remote Repository Commands

### git remote
```
git remote
```

### git remote -v
```
git remote -v
```

### git remote add
```
git remote add origin <url>
```

### git remote remove
```
git remote remove origin
```

### git fetch
```
git fetch
```

### git fetch --all
```
git fetch --all
```

### git pull
```
git pull
```

### git pull --rebase
```
git pull --rebase
```

### git push
```
git push
```

### git push -u origin branch-name
```
git push -u origin main
```

### git push --force
```
git push --force
```

---

# 9. Stash Commands

```
git stash
git stash list
git stash pop
git stash apply
git stash drop
git stash clear
```

---

# 10. Reset & Undo Commands

```
git reset
git reset --soft
git reset --mixed
git reset --hard
git revert
git clean -f
git clean -fd
```

---

# 11. Rebasing Commands

```
git rebase
git rebase -i
git rebase --continue
git rebase --abort
```

---

# 12. Cherry Pick & Patch Commands

```
git cherry-pick
git format-patch
git apply
git am
```

---

# 13. Tagging Commands

```
git tag
git tag -a v1.0 -m "version 1.0"
git tag -d v1.0
git push origin --tags
```

---

# 14. Submodule Commands

```
git submodule add <repo-url>
git submodule init
git submodule update
```

---

# 15. Debugging Commands

```
git bisect
git bisect start
git bisect good
git bisect bad
```

---

